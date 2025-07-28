export default function Toast({ text, show }) {
	if (!show) return null
	return <div style={{ position: 'fixed', right: 16, bottom: 16, padding: '8px 12px', border: '1px solid #ddd', background: '#fff', borderRadius: 8 }}>
		{text}
	</div>
}