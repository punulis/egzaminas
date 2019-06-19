import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <header class="row justify-content-center">
                    <h1 class="col-6-offset-3 ">Svajonių atostogos</h1>
                </header>

                <div class="row-posts">
                    <div class="trip col-2">
                        <img src="#"/>
                        <h3>Title</h3>
                        <p>Description</p>
                            <div class="row-interactions">
                                <div class="like"></div>
                                <div class="remove"></div>
                            </div>


                    </div>
                </div>
                {/*<div className="row justify-content-center">*/}
                    {/*<div className="col-md-8">*/}
                        {/*<div className="card">*/}
                            {/*<div className="card-header">Example Component</div>*/}

                            {/*<div className="card-body">I'm an example component!</div>*/}
                        {/*</div>*/}
                    {/*</div>*/}
                {/*</div>*/}
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
