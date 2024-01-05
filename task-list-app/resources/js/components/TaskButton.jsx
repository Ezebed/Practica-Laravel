import React from "react";

export default function TaskButton({text, handleClick}){

    const btnStyle = " bg-indigo-400 border-2 border-indigo-600 w-[30px] h-[30px] rounded-lg text-center outline-none";

    return(
        <button className={btnStyle} value='hola como estas btn' onClick={handleClick} >{text}</button>
    );
}