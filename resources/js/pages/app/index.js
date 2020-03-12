import React, { Component } from 'react'
import { Route, Switch, BrowserRouter } from "react-router-dom";
import HTML5Backend from 'react-dnd-html5-backend'
import { DragDropContext } from 'react-dnd'
import Home from '../home';
import Foods from '../foods';
// import update from 'immutability-helper'
import 'antd/dist/antd.css'
import './index.css'
import './overrides.css'

class App extends Component {
  state = {
  } 

  render() {
    return (
      <div className="app-container">
        <BrowserRouter>
            <Switch>
                <Route exact path="/admin/react" component={Home} />
            </Switch>
        </BrowserRouter>
      </div>
    );
  }
}

export default DragDropContext(HTML5Backend)(App);
