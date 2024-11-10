// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		container: {
			center: true,
			padding: '24px',
		},
		extend: {
			fontFamily: {
				SimplonNorm: ["SimplonNorm", "sans-serif"],
			},
			colors: {
				'white': '#ffffff',
				'black': '#000000',
				'orange': '#F28A2F',
				'dark-blue': '#001B3F',
				'blue': '#0064A6',
				'white-light': 'rgba(255, 255, 255, 0.2)'
			},
			fontSize: {
				'h1': '4rem',
				'h2': '2.5rem',
				'h2-mobile': '2rem',
				'16': '1rem',
				'14': '0.875rem'
			},
			screens: {
				'2xl': '1285px',
			}
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
