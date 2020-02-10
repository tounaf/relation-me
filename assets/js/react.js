import ReactDOM from 'react-dom';
import React from 'react';

function Welcome(props) {
    return <p>Hello {props.name}</p>;
}
function App() {
    return (
        <div>
            <Welcome name="Sara" />
            <Welcome name="Cahal" />
            <Welcome name="Edite" />
        </div>);
}
const element = <App />;
ReactDOM.render(element,
    document.getElementById('root')
)