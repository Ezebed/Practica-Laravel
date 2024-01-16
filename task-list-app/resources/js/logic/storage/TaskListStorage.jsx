import React from "react";

// export let tasks = [];

export const saveTaskList = (tasks) => {
    window.localStorage.setItem('taskList', JSON.stringify(tasks));
}

export const loadTaskList = () => {
    let tasksFromStorage = window.localStorage.getItem('taskList');
    tasksFromStorage = JSON.parse(tasksFromStorage);
    return tasksFromStorage;
}

export const saveTaskState = (taskText, stateValue) => {
    window.localStorage.setItem(taskText,stateValue);
}

export const loadTaskState = (taskText) => {
    let taskStateFromStorage = window.localStorage.getItem(taskText);
    return JSON.parse(taskStateFromStorage);
}

export const deleteTaskState = (taskText) => {
    window.localStorage.removeItem(taskText);
} 