import React, { useState } from 'react'

export default function App() {
	const [count, setCount] = useState(0)

	return (
		<div className="p-4">
			<h2 style={{ margin: 0 }}>Hello from React inside WordPress 👋</h2>
			<p>REST URL from PHP: <code>{window.WP_REACT_PLUGIN?.restUrl}</code></p>
			<button onClick={() => setCount(c => c + 1)}>Clicked {count} times</button>

			<p style={{ opacity: .7, fontSize: 12, marginTop: 8 }}>
				v{window.WP_REACT_PLUGIN?.version || 'dev'}
			</p>
		</div>
	)
}