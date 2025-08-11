import React, { useState } from 'react';
import CounterButton from './components/CounterButton.jsx';
import useDarkMode from './hooks/useDarkMode.js';

export default function App() {
	const [count, setCount] = useState(0);
	const [dark, setDark] = useDarkMode();

	return (
		<div className="p-4">
			<button onClick={() => setDark(d => !d)} style={{ marginLeft: 8 }}>
				{dark ? 'Light' : 'Dark'} mode
			</button>
			<h2 style={{ margin: 0 }}>Hello from React inside WordPress 👋</h2>
			<p>REST URL from PHP: <code>{window.WP_REACT_PLUGIN?.restUrl}</code></p>
			<CounterButton count={count} onClick={() => setCount(c => c + 1)} />

			<p style={{ opacity: .7, fontSize: 12, marginTop: 8 }}>
				v{window.WP_REACT_PLUGIN?.version || 'dev'}
			</p>
		</div>
	)
}