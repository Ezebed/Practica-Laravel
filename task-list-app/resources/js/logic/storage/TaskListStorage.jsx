import React from "react";

export const saveTaskList = (tasks) => {
    window.localStorage.setItem('taskList', JSON.stringify(tasks));
}

export const loadTaskList = () => {
    let tasksFromStorage = window.localStorage.getItem('taskList');
    tasksFromStorage = JSON.parse(tasksFromStorage);
    return tasksFromStorage;
} 