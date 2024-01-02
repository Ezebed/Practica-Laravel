import React, { useState } from 'react';
import PrincipalLayout from '../layouts/principalLayout';
import { Head } from '@inertiajs/inertia-react';

const Test = () => {
    return (
        <PrincipalLayout header="titulo del header" >
            <Head title="Test Page" />

            <h1 className='text-3xl font-bold drop-shadow-sm p-6 bg-[#333]' >This is test component</h1>
        </PrincipalLayout> 
    );
}

export default Test