import React from "react";

export default function Principal({children, header}){




    return( 
        <div className="min-h-screen bg-gray-100" >

            <header className="h-10 w-screen bg-gray-200  " >
                <p className="p-[10px] block font-bold">{header}</p>
            </header>

            <div>{children}</div>

        </div>
     );
} 