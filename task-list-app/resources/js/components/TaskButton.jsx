export default function TaskButton({text, handleClick, btnValue}){

    const btnStyle = " bg-indigo-400 border-2 border-indigo-600 w-fit min-w-[30px] h-[30px] rounded-lg text-center outline-none px-2 font-bold hover:bg-indigo-700";

    return(
        <button className={btnStyle} value={btnValue} onClick={handleClick} >{text}</button>
    );
}