
import React, { Component } from "react";
import Blink from 'react-blink-text';


function QueuMain() {
    return (
        <div className="row p-3">
            <div className="d-grid gap-1 col-4">
                <button className="btn btn-secondary btn-lg" type="button">REGULAR</button>
                <button className="btn btn-success btn-lg" type="button">SENIOR / PWD</button>
                <div className="card text-center">
                    <div className="card-body text-bg-warning"><br />
                        <p className="card-title textlet">This is your Queue</p><br />
                        <h1 className="card-subtitle mb-5 textnum">001</h1>
                        <p className="card-text textlet">Please wait on your queue to be called and
                            proceed to your designated counter</p>
                    </div>
                </div>
            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 className="card-title">COUNTER 1</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3  text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text='011'></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-info mb-1  text-center">
                    <div className="card-body">
                        <button class="btn btn-info" type="button">Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text">Total Served: 10</p>
                    </div>
                </div>
            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 className="card-title">COUNTER 2</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3 text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text='006'></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-info mb-1  text-center">
                    <div className="card-body">
                        <button className="btn btn-info" type="button">Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text">Total Served: 5</p>
                    </div>
                </div>
            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 class="card-title">SENIOR / PWD</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3  text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text='016'></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-info mb-1  text-center">
                    <div className="card-body">
                        <button className="btn btn-info" type="button">Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text">Total Served: 15</p>
                    </div>
                </div><br /><br />
            </div>

            <marquee width="50%" direction="left" height="40%"><b>
                Welcome to My Queueing Sytem. I am Counter 1</b>
            </marquee>

        </div>


    );
};

export default QueuMain;  