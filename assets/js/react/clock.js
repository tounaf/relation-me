import ReactDom from 'react-dom';
import React from 'react';

export class Clock extends React.Component{
    constructor(props) {
        super(props);
        this.state = {date: new Date()};
    }
    componentDidMount() {
        console.log("mount component");
        this.timerId = setInterval(()=>this.tick(),1000);
    }
    componentWillUnmount() {
        console.log("un mount component");
        clearInterval(this.timerId);
    }

    tick() {
        this.setState({
            date: new Date()
        });
    }
    render() {
        return (
        <div>
            <h1>Bonjour, monde !</h1>
            <h2>Il est {this.state.date.toLocaleTimeString()}.</h2>
        </div>
        );
    }
}