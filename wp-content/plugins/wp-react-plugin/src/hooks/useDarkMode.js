import { useEffect, useState } from 'react';

export default function useDarkMode(key = 'wp_dark') {
	const [dark, setDark] = useState(() => localStorage.getItem(key) === '1')
	useEffect(() => { document.documentElement.dataset.theme = dark ? 'dark' : ''; localStorage.setItem(key, dark ? '1' : '0') }, [dark])
	return [dark, setDark]
}