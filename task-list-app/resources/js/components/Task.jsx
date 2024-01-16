import { useEffect, useState } from "react";
import TaskButton from "./TaskButton";
import { deleteTaskState, loadTaskState, saveTaskState } from "../logic/storage/TaskListStorage";

export default function Task({taskId, taskText, handleClick }){

    const [isChecked,setIsChecked] = useState(false);


    useEffect(() => {
        const stateLoaded = loadTaskState(taskText);

        if(typeof stateLoaded === 'boolean'){
            setIsChecked(stateLoaded);
        }
    },[]);

    useEffect(() => {
        saveTaskState(taskText,isChecked);
    },[isChecked]);

    const taskStyle = "h-[50px] border-2 p-2 flex justify-between transition-all ease-linear first:rounded-t-lg last:rounded-b-lg";
    const taskCompleteStyle = " border-[#333] text-white bg-[#333] border-b-indigo-500";
    const taskIncompleteStyle = " border-indigo-500 text-black bg-indigo-300";
    
    const checkboxStyle = "appearance-none w-4 h-4 my-[auto] text-indigo-500 ring-indigo-500  border-indigo-500 rounded bg-[#333] ";
    const checkboxCheckedStyle = "checked:bg-indigo-500";

    const handleCheckboxChange = () => {
        setIsChecked(!isChecked);
    } 

    const handleDelete = () => {
        
        deleteTaskState(taskText);
        handleClick(taskText);
    }

    return(

        <li id={taskId} className={taskStyle + (isChecked ? taskCompleteStyle :taskIncompleteStyle) } >
            <div className="flex space-x-2 h-full w-fit">
                <input name="taskCheckBox" type="checkbox" onChange={handleCheckboxChange} checked={isChecked} className={checkboxStyle+checkboxCheckedStyle}  />
                <p className="font-bold ">{taskText}</p>
            </div>

            <TaskButton text='X' btnValue={taskId} handleClick={handleDelete}/>
        </li>
    );
}