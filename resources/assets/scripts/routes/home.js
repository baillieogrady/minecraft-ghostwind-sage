import tippy from 'tippy.js';


export default {
  init() {
    // JavaScript to be fired on the home page
    tippy('.avatar');
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // ReactDom.render(<Posts/>, document.getElementById('posts'));
  },
};
