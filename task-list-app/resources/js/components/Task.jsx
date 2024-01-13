import TaskButton from "./TaskButton";

export default function Task({taskId, taskText, handleClick}){



    const taskStyle = "h-[50px] border-2 border-indigo-500 rounded p-2 text-white flex justify-between bg-indigo-300";
    const checkboxStyle = " w-4 h-4 my-[auto] text-indigo-500 ring-indigo-500 border-indigo-500 rounded ";

    return(

        <div id={taskId} className={taskStyle} >
            <div className="flex space-x-2 h-full w-fit">
                <input name="taskCheckBox" type="checkbox" className={checkboxStyle} />
                <p className="font-bold text-black">{taskText}</p>
            </div>

            <TaskButton text='X' btnValue={taskId} handleClick={handleClick}/>
        </div>
    );
}