import React from "react";
import ReactDOM from "react-dom";
import { Provider } from "mobx-react";
import { Route, Switch, BrowserRouter } from "react-router-dom";
import Store from './store';
import App from './pages/app';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if (document.getElementById("example")) {
    ReactDOM.render(
        <Provider {...Store}>
            <App/>
        </Provider>,

        document.getElementById("example")
    );
}
