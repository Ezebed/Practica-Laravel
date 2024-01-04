import React, { useState } from "react";
import { Head } from '@inertiajs/inertia-react';
import TaskListLayout from "../layouts/TaskListLayout";
import TaskButton from "../components/TaskButton";
import Task from "../components/Task";

export default function TaskList(){
    const [tasks, setTasks ] = useState([]);
    
    const deleteTask = (e) => {
        // let taskDeleted = e.taskId;
        console.log(e);
    }

    const addTask = () => {
        console.log('add task');
        const newTask = <Task 
                            taskText={'Task '+ (tasks.length + 1)} 
                            key={tasks.length+1} 
                            taskId={tasks.length+1} 
                            handleClick={deleteTask} />;
                            
        setTasks([...tasks, newTask]);
    } 

    return (
        <TaskListLayout>

            <Head title="Task List"></Head>
            
            <div className="h-[50px] flex-row-reverse flex border-b-2 border-indigo-500 py-2">
                <TaskButton text={'+'} handleClick={addTask}/>
            </div>

            <div className="min-h-[60vh] my-4 p-4 rounded-lg bg-[#5c5b5b]  ">
                    {tasks}
            </div>
        </TaskListLayout>
    );
}