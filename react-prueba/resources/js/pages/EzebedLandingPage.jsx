import React, { useState } from 'react';
import LandingPage from '../layouts/LandingPage';
import { Head } from '@inertiajs/inertia-react';

const Test = () => {
    return (
        <LandingPage header="titulo del header" >
            <Head title="Ezebed" />

            <h1 className='text-3xl font-bold drop-shadow-sm p-6 bg-[#333]' >Landing Ezebed</h1>
        </LandingPage> 
    );
}

export default Test