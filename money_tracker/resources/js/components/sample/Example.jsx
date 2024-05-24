import React from 'react';
import ReactDOM from 'react-dom/client';

import Dashboard from './Dashboard';

function Example() {
    return (
        <Dashboard />
    );
}

export default Example;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
