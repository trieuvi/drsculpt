import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import Index from './src/index'

class App extends Component {    
    render () {
        return (
            <Index />
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))