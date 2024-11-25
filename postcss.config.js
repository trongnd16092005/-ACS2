module.exports = {
    plugins: [
      require('postcss-prefix-selector')({
        prefix: '.bootstrap3', // Tiền tố namespace
        exclude: [/^html/, /^body/], // Loại trừ quy tắc global
      }),
    ],
  };
  