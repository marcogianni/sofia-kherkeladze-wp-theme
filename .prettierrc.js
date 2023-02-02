module.exports = {
	tabWidth: 4,
	semi: false,
	singleQuote: true,
	overrides: [
		{
			files: ['*.php', 'legacy/**/*.php'],
			options: {
				braceStyle: '2tbs',
				tabWidth: 4,
			},
		},
	],
}
