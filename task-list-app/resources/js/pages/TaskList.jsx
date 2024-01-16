import React, { useEffect, useState } from "react";
import { Head, Link } from '@inertiajs/inertia-react';
import TaskListLayout from "../layouts/TaskListLayout";
import TaskButton from "../components/TaskButton";
import Task from "../components/Task";
import { saveTaskList, loadTaskList  } from "../logic/storage/TaskListStorage";
import TaskForm from "../components/taskForm";



export default function TaskList(){
    
    const [tasks,setTasks] = useState([]);

    // estado para el modal de nueva tarea
    const [modalActive, setModalActive] = useState(false);

    
    useEffect(() => {
        const tasksLoaded = loadTaskList();

        if( tasksLoaded && Array.isArray(tasksLoaded)){
            
            setTasks(tasksLoaded);
        }
    },[]);

    useEffect(() => {
        saveTaskList(tasks);
    },[tasks])

    

    // borrar task de la lista
    const deleteTask = (taskText) => {
        // console.log(tasks);
        
        const newTasks = tasks.filter(text => text !== taskText);
        setTasks(newTasks);
    }
    
    // agregar una nueva tarea a la lista
    const addTask = (newTaskText) => {
        console.log(tasks);
        const newTasks = [ ...tasks ,newTaskText];
        
        setTasks(newTasks)
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
                    {
                        tasks.map((text,index) => { return <Task key={index}
                                                                taskId={'task_'+(index+1)}
                                                                taskText={text}
                                                                handleClick={deleteTask} /> })
                    }
            </ul>

            {modalActive && <TaskForm handleCancelar={toggleModal} handleAcept={addTask}/>}
        </TaskListLayout>
    );
}