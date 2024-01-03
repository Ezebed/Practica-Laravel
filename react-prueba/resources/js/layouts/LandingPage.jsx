import React from "react";
import LandingBanner from "../components/landingBanner";
import NavBar from "../components/NavBar";

export default function Landing({children, header}){
    const imgName = 'landing/Ezebed_photo.webp';
    const imgUrl = `/images/${imgName}`;

    return(
        <div className="min-h-screen">

            {/* Banner */}
            <LandingBanner UserPhoto={imgUrl} ></LandingBanner>

            <NavBar></NavBar>

            <div>{children}</div>


        </div>
    );
}