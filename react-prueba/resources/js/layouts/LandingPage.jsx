import React from "react";

export default function Landing({children, header}){
    const imgName = 'landing/landingBanner.webp';
    const imgUrl = `/images/${imgName}`;

    return(
        <div className="min-h-screen">

            <div className="h-[60vh] bg-slate-100  overflow-hidden hero ">

                <div className="w-full h-full flex justify-center relative">
                    <h1 className="text-center self-center h-fit text-8xl block font-bold text-white" >Ezebed</h1>

                    <div className="absolute bottom-2 left-4 self-end rounded-full h-[150px] w-[150px] bg-orange-300 overflow-hidden ">
                        <img className=" object-cover h-full " src={imgUrl} alt="Ezebed" />
                    </div>
                </div>
                

                

            </div>

            <div>{children}</div>


        </div>
    );
}