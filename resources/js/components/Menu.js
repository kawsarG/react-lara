import React, {Component, Fragment} from 'react';
import {Nav, Navbar} from "react-bootstrap";
import logo from '../../images/logo.svg';
class Menu extends Component {
    render() {
        return (
            <Fragment>
                <Navbar bg="primary" expand="lg">
                    <Navbar.Brand className="text-dark" href="#home">
                        <img src={logo}/>
                    </Navbar.Brand>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" />
                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="mr-auto">
                            <Nav.Link className='nav-font' href="/">Home</Nav.Link>
                            <Nav.Link className='nav-font' href="/coursePlan">Course Plan</Nav.Link>
                            <Nav.Link className='nav-font' href="/freeClass">Free Class</Nav.Link>
                            <Nav.Link className='nav-font' href="/registration">Registration</Nav.Link>
                        </Nav>
                    </Navbar.Collapse>
                </Navbar>
            </Fragment>
        );
    }
}

export default Menu;
