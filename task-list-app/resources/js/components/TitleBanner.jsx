import React from "react";

export default function TitleBanner(){
    const taskText = ['T','a','s','k']; 
    const listText = ['L','i','s','t']; 

    const textStyle = 'text-pop-up-top text-7xl font-bold text-white ';

    return(
        <div className="h-[30%] py-24 border-b-2 border-indigo-500 grid place-content-center grid-flow-col space-x-4">
            
            <div className="flex">
                {taskText.map((letter,index) => { return <p key={'task_'+letter+index} className={textStyle} >{letter}</p> } )}
            </div>
            <div className="flex">
                {listText.map((letter,index) => { return <p key={'list_'+letter+index} className={textStyle} >{letter}</p> } )}
            </div>
            

        </div>
    );
}