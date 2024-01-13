import React, { useEffect, useState } from "react";
import { Head, Link } from '@inertiajs/inertia-react';
import TaskListLayout from "../layouts/TaskListLayout";
import TaskButton from "../components/TaskButton";
import Task from "../components/Task";
import { saveTaskList, loadTaskList } from "../logic/storage/TaskListStorage";
import TaskForm from "../components/taskForm";


export default function TaskList(){
    // estados para las tareas
    const [tasks, setTasks ] = useState([]);

    // estado para el modal de nueva tarea
    const [modalActive, setModalActive] = useState(false);

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
    
    // borrar task de la lista
    const deleteTask = (e) => {
        let taskToDelete = document.getElementById(e.target.value);
        taskToDelete.remove();
        saveTaskList(tasks)
    }
    
    // agregar una nueva tarea a la lista
    const addTask = (newTaskText) => {
        // console.log(tasks);
        const newTask = <Task 
                            taskText={newTaskText} 
                            taskId={'task_'+(tasks.length+1)} 
                            handleClick={deleteTask} />;
        const newList = [...tasks, newTask];
        saveTaskList(newList);
        setTasks(newList);
        toggleModal();
    }

    // activar el formulario para nueva tarea
    const toggleModal = () => {
        setModalActive(!modalActive);
    }

    return (
        <TaskListLayout>

            <Head title="Task List"></Head>
            
            <div className="h-[50px] flex-row-reverse flex border-b-2 border-indigo-500 py-2">
                <TaskButton text={'Agregar Tarea'} handleClick={toggleModal}/>
            </div>

            <ul className="min-h-[60vh] my-4 p-2 rounded-lg bg-[#5c5b5b]  ">
                    {tasks.map((x, index) => { return <li key={index}  > { x } </li> })}
            </ul>

            {modalActive && <TaskForm handleCancelar={toggleModal} handleAcept={addTask}/>}
        </TaskListLayout>
    );
}