import React, {Component,Fragment} from 'react';
import Menu from "../components/Menu";
import HomeBanner from "../components/HomeBanner";

class HomePage extends Component {
    render() {
        return (
           <Fragment>
               <Menu></Menu>
               <HomeBanner/>
           </Fragment>
        );
    }
}

export default HomePage;
