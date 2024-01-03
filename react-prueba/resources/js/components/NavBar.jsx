import React from "react";
import { InertiaLink, usePage } from "@inertiajs/inertia-react";


export default function NavBar(){

    const { url } = usePage();
    const linkStyle = "text-white font-bold text-xl hover:bg-blue-500 transition-colors ease-in-out h-full px-4 py-2 outline-none";
    const activeLink = "border-b-2 border-indigo-500 shadow-[inset_0px_-32px_15px_-30px_rgba(0,0,0,0.75)] shadow-indigo-500/50";

    const setStyle = (route) => {
        return url === route ? linkStyle + ' ' + activeLink : linkStyle; 
    }

    return(
        <div className="h-[50px] bg-[#333] flex space-x-px " >
            <InertiaLink 
            className={setStyle('/')} href="/" >Home</InertiaLink>
            <InertiaLink 
            className={setStyle('/test') } href="/test" >Test</InertiaLink>

        </div>
    );
}