import fluid, { extract, screens, fontSize } from 'fluid-tailwind';

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: {
		files: ['./theme/**/*.php'],
		extract,
	},
	theme: {
		screens,
		fontSize,
		extend: {
			screens: {
				xs: '24.375rem',
			},
			maxWidth: {
				'150px': '9.375rem',
				'1300px': '81.25rem',
			},
			boxShadow: {
				'bottom': '0 4px 6px rgba(0, 0, 0, 0.1)',
			},
			animation: {
				pulse: 'pulse 1s infinite',
			},
			keyframes: {
				pulse: {
					'0%': {
						transform: 'scale(1)',
					},
					'50%': {
						transform: 'scale(1.1)',
					},
					'100%': {
						transform: 'scale(1)',
					},
				},
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		fluid({
			checkSC144: false, // default: true
		}),
		require('@_tw/themejson'),
	],
};
