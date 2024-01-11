import React, { useEffect, useState } from "react";
import { Head, Link } from '@inertiajs/inertia-react';
import TaskListLayout from "../layouts/TaskListLayout";
import TaskButton from "../components/TaskButton";
import Task from "../components/Task";
import { saveTaskList, loadTaskList } from "../logic/storage/TaskListStorage";
import TaskForm from "../components/taskForm";


export default function TaskList(){
    const [tasks, setTasks ] = useState([]);

    // cargando los tasks desde ellocal storage
    useEffect(() => {
        const tasksLoaded = loadTaskList();

        if( tasksLoaded && Array.isArray(tasksLoaded) ){
            const reactTasks = tasksLoaded.map((task, index) =>{
                const newProps = {
                    taskId: task.props.taskId,
                    taskText: task.props.taskText,
                    handleClick: deleteTask
                }
                return React.createElement(Task, {key: index, ...newProps  });
            });

            setTasks(reactTasks);
        }
    }, []);
    
    const deleteTask = (e) => {
        let taskToDelete = document.getElementById(e.target.value);
        taskToDelete.remove();
        saveTaskList(tasks)
    }
    
    const addTask = () => {
        console.log(tasks);
        const newTask = <Task 
                            taskText={'Task '+ (tasks.length + 1)} 
                            taskId={'task_'+(tasks.length+1)} 
                            handleClick={deleteTask} />;
        const newList = [...tasks, newTask];
        saveTaskList(newList);
        setTasks(newList);
    } 

    return (
        <TaskListLayout>

            <Head title="Task List"></Head>
            
            <div className="h-[50px] flex-row-reverse flex border-b-2 border-indigo-500 py-2">
                <TaskButton text={'X'} handleClick={addTask}/>
            </div>

            <ul className="min-h-[60vh] my-4 p-2 rounded-lg bg-[#5c5b5b]  ">
                    {tasks.map((x, index) => { return <li key={index} > { x } </li> })}
            </ul>

            {/* <TaskForm /> */}
        </TaskListLayout>
    );
}