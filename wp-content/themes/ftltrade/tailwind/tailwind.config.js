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
				Barlow: ["Barlow", "sans-serif"],
			},
			colors: {
				'blue': '#142053',
				'green': '#049367',
				'dark': '#111111',
			},
			fontSize: {
				'h1': '4rem',
				'h2': '2.5rem',
				'h2-mobile': '2rem',
				'16': '1rem',
				'14': '0.875rem'
			},
			screens: {
				'2xl': '1300px',
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
