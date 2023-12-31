import React from "react";
import { createRoot } from 'react-dom/client';

function Welcome(props) {
    return <h1>Hello, {props.name}</h1>;
}
  
const root = ReactDOM.createRoot(document.getElementById('hola'));
const element = <Welcome name="Sara" />;
root.render(element);