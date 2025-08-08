import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import { resolve } from 'path'

export default defineConfig({
	plugins: [react()],
	root: 'src',
	base: './',
	build: {
		outDir: resolve(__dirname, 'build'),
		emptyOutDir: true,
		rollupOptions: {
			input: resolve(__dirname, 'src/main.jsx'),
			output: {
				entryFileNames: 'index.js',
				assetFileNames: (assetInfo) => {
					if (assetInfo.name && assetInfo.name.endsWith('.css')) return 'index.css'
					return '[name][extname]'
				}
			}
		}
	},
	server: {
		port: 5173
	}
})