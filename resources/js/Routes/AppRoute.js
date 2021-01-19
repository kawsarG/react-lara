import React, {Component,Fragment} from 'react';
import {Route, Switch } from "react-router";
import HomePage from "../Pages/HomePage";
import CoursePlan from "../Pages/CoursePlan";
import Registration from "../Pages/Registration";
import Freeclass from "../Pages/Freeclass";

class AppRoute extends Component {
    render() {
        return (
            <Fragment>
                <Switch>
                    <Route exact path={'/'} component={HomePage}/>
                    <Route exact path={'/coursePlan'} component={CoursePlan}/>
                    <Route exact path={'/registration'} component={Registration}/>
                    <Route exact path={'/freeClass'} component={Freeclass}/>
                </Switch>
            </Fragment>
        );
    }
}

export default AppRoute;
