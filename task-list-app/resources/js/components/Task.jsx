import React, { useState } from "react";
import TaskButton from "./TaskButton";

export default function Task({taskId, taskText, handleClick}){



    const taskStyle = "h-[50px] border-2 border-indigo-500 rounded-lg p-2 text-white flex justify-between ";

    return(

        <div id={taskId} className={taskStyle} >
            <p className="font-bold">{taskText}</p>

            <TaskButton text='X' handleClick={handleClick}/>
        </div>
    );
}