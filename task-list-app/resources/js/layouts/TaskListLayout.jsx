import React from "react";
import TitleBanner from "../components/TitleBanner";

export default function TaskListLayout({children}) {

    document.body.style.backgroundColor = '#333'; 

    return(
        <div className=" " >

            <div className="h-[90%] w-4/5 mx-auto ">
                <TitleBanner />
                
                {children}
            </div>
            
        </div>
    );
}