import ReactDom from 'react-dom';
import React from 'react';

export class Counter extends React.Component{
    constructor(props) {
        super(props);
        this.state = {counter: 0};
        this.incrementCounter = this.incrementCounter.bind(this);
    }


    render() {
        return (
          <button onClick={this.incrementCounter}> Counter : {this.state.counter}</button>
        );
    }

    incrementCounter() {
        this.setState(function(state, props) {
            return {
                counter: state.counter + 1
            };
        });
    }
}