import { useEffect, useState } from "react";
import TaskButton from "./TaskButton";


export default function TaskForm({handleCancelar, handleAcept}) {

    const placeStyles = 'fixed w-svw h-screen grid place-content-center top-0 left-0 bg-[rgba(10_10_10_/0.9)]';
    const formStyles = 'border-2 border-indigo-500 w-[400px] h-[200px] bg-[#333] rounded-lg p-2 grid content-center';
    const inputStyles = 'max-w-full w-full outline-none rounded px-2 border-2 border-indigo-500 h-10 font-bold ';
    

    const [newTaskText,setNewTaskText] = useState('') ;
    
    const handleChange = (e) => {
        setNewTaskText(e.target.value);
    }

    const setTask = () => {
        
        if(newTaskText === '') {
            document.getElementById('taskID').classList.add('animate-shake');
            setTimeout(() => {
                document.getElementById('taskID').classList.remove('animate-shake');
            },1000);
        }else handleAcept(newTaskText);

    }

    return (
        <div className={placeStyles} >
            <div className={formStyles} >

                <input id="taskID" name="taskname" className={ inputStyles } type="text" placeholder="Task Text..." onChange={handleChange} />

                <div className="flex justify-around mt-4" >
                    <TaskButton text='Agregar' handleClick={setTask} />

                    <TaskButton text='Cancelar' handleClick={handleCancelar} />
                </div>

                
                
            </div> 
        </div>
    );
}