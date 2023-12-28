import React from "react";
import { createRoot } from 'react-dom/client';

export default function hola(){
    return <div> Hola componente de react </div>;
}

if (document.getElementById('hola')){
    createRoot(document.getElementById('hola')).render(<hola />);
}