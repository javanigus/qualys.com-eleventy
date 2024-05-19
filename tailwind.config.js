/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./site/**/*.{hbs,js,json}"],
	safelist: [
		'border-transparent',
		{
			pattern: /border-product-(1|2|3|4|5|6)/
		}
	],
	theme: {
		extend: {
			screens: {
				'xs': '360px',
				'sm': '640px',
				'md': '768px',
				'lg': '1024px',
				'xl': '1280px',
				'2xl': '1440px'
			},
			colors: {
				current 	: 'currentColor',
				transparent	: 'transparent',
				black: '#000',
				white: '#fff',
				navbar: '#0A4882',
				dark: '#1D2737',
				light: '#F2F2FF',
				blueBox: '#066FD1',
				content: '#21252C',
				content2: '#545E6C',
				bg1: 'rgba(51, 59, 70, 0.9)',
				'blueBase': '#095FB3',

				'primary': {
					1: '#FFECE7',
					2: '#FF6C63',
					3: '#FE4841',
					4: '#ED2E26',
					5: '#D8160D'
				},
				'secondary': {
					1: '#F6FAFF',
					2: '#D2EDFF',
					3: '#59AFFF',
					4: '#228CEF',
				},
				'tertiary': {
					1: '#5E6878',
					2: '#3D4B62',
					3: '#203350',
					4: '#16263F',
				},
				'balance': {
					1: '#F3F5F8',
					2: '#E0E4EA',
					3: '#BFC6D2',
					4: '#ABB4C5',
					5: '#848D9C',
					6: '#545E6C',
					7: '#333B46',
					8: '#21252C',
				},
				'product': {
					'1': '#494FE5',
					'2': '#DE1616',
					'3': '#DB6006',
					'4': '#FFCE5C',
					'5': '#9EFA82',
					'6': '#80ECF8',
					'av': '#686DFC',
					'vm': '#F04141',
					'rr': '#FF7B1B',
					'td': '#F1B938',
					'cp': '#7AEB57',
					'cs': '#32DDF0'
				},
				'events': {
					'event': '#04B1C8',
					'media': '#A000A3',
					'press': '#0D9801',
					'blog': '#A37500'
				}
			},
			backgroundImage: {
				'trial-pattern': "url('https://ik.imagekit.io/qualys/image/trial-bg.png')",
				'grid-pattern': "url('https://ik.imagekit.io/qualys/image/abstract-grid-bg.png?tr=orig-true')",
				'grid-pattern-2': "url('https://ik.imagekit.io/qualys/image/grid-bg-pattern.png?tr=orig-true')",
				'blueGradient': "radial-gradient(155.41% 706.16% at -61.21% -51.25%, #0A182E 0%, #1F385F 53.65%, #228CEF 100%)",
				'sheild': "url('https://ik.imagekit.io/qualys/image/shield-2.png?tr=orig-true')",
				'button': "linear-gradient(96.68deg, #B00303 6.93%, #D8160D 52.47%, #B00303 93.49%)",
				'buttonHover': "linear-gradient(200deg, #e50505 6.93%, #D8160D 52.47%, #bb3030 93.49%)",
				'heroBg': "url(https://ik.imagekit.io/qualys/image/home/bg-hero-trurisk.jpg?v=2)",
				'heroGradient': "radial-gradient(92.7% 423.28% at 1.49% 19.98%, #0149B0 0%, #0E76E2 100%)",
				'trialBg1': "url('https://ik.imagekit.io/qualys/image/apps/bg-trial-form.jpg')",
				'trialBg2': "url('https://ik.imagekit.io/qualys/image/apps/bg-trial-form-2.jpg')",
				'darkOverlay': "linear-gradient(124deg, rgba(18,15,129,1) 0%, rgba(9,71,97,1) 100%)",
				'graySplit': "linear-gradient(90deg, rgba(255,255,255,1) 50%, rgba(240,240,247,1) 50%)",
				'blueSplit': "linear-gradient(93deg, #1F385F 40%, #F3F5F8 61.15%)",
				'boxBgGradient': "linear-gradient(297.56deg, #F6FAFF 2.01%, #FFFFFF 99.92%)",
				'diloFooter': "linear-gradient(357.36deg, #010220 0%, #192F92 100%)"
			},
			fontSize: {
				'small': ['14px', '1.714'],
				'base': ['16px', '1.75'], // body default
				'large': ['18px', '1.667'],
				'larger': ['22px', '1.636'],
				'h1': ['clamp(38px, calc(2.375rem + ((1vw - 3.2px) * 1.0417)), 48px)', '1.208'],
				'h2': ['clamp(28px, calc(1.75rem + ((1vw - 3.2px) * 0.8333)), 36px)', '1.278'],
				'h3': ['24px', '1.417'],
				'h4': ['22px', '1.273'],
				'h5': ['18px', '1.333'],
				'h6': ['16px', '1.375'],
			},
			fontFamily: {
				'raleway': 'Raleway',
				'montserrat': 'Montserrat'
			},
			spacing: {
				'logo': '104px',
				'30px': '30px',
				'120px': '120px'
			},
			minWidth: {
				'logo': '104px',
				'mobile': '360px'
			},
			maxWidth: {
				'wrapper': '1440px',
				'container': '1240px' // 1240 + 8px gutter
			},
			padding: {
				'wrapper': 'clamp(30px, calc(1.875rem + ((1vw - 10.24px) * 11.7188)), 60px)',
				'container': 'clamp(10px, calc(0.625rem + ((1vw - 10.24px) * 11.7188)), 40px)',
				'header-container': 'clamp(16px, calc(1rem + ((1vw - 10.24px) * 9.375)), 40px)'
			},
			dropShadow: {
				1: '0px 2px 6px rgba(20, 20, 43, 0.06)',
				2: '0px 2px 12px rgba(20, 20, 43, 0.08)',
				3: '0px 8px 28px rgba(20, 20, 43, 0.10)',
				4: '0px 14px 42px rgba(20, 20, 43, 0.14)',
				5: '0px 24px 65px rgba(20, 20, 43, 0.16)',
				6: '0px 32px 72px rgba(20, 20, 43, 0.24)',
				'btn-1': '0px 4px 10px rgba(20, 20, 43, 0.04)',
				'btn-2': '0px 6px 20px rgba(20, 20, 43, 0.06)',
				'btn-3': '0px 10px 28px rgba(20, 20, 43, 0.10)',
				'features': '0px 0px 30px rgba(0, 0, 0, 0.3)',
				'dilo': '0px 0px 30px rgba(9, 95, 179, 0.15)'
			},
			boxShadow: {
				'featuredBox': "0px 0px 20px #E0E4EA"
			},
			zIndex: {
				'header': '2000',
				'mobile-menu': '2010',
				'page-overlay': '2009'
			},
			height: {
				'navbar': '80px',
			}
		}
	},
	plugins: [],
}