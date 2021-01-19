import React, {Component,Fragment} from 'react';
import {Col, Container, Row} from "react-bootstrap";
class HomeBanner extends Component {
    render() {
        return (
            <Fragment>
                <Container fluid className='parallax'>
                    <Row>
                        <Col lg={12} md={12} sm={12}>
                            <h1 className="title-text">Kawsar Ahmed</h1>
                        </Col>
                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default HomeBanner;
