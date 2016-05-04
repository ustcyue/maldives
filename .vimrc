set nocompatible
syntax on
set background=dark
colorscheme solarized
set number
imap   <Left><Del>
imap jj  <ESC>
set autoindent
set tabstop=4
set sw=4
filetype indent on
set expandtab
set clipboard=unnamed
set hlsearch
set guifont=Monospace\ 13
filetype plugin on
"nmap <F8> :TlistToggle<CR>
let g:NERDTree_title="[NERDTree]" 
function! NERDTree_Start()
    exec 'NERDTree'
endfunction
function! NERDTree_IsValid()
   return 1
endfunction
let g:winManagerWindowLayout='NERDTree|TagList'
let g:persistentBehaviour=0
let Tlist_Exit_OnlyWindow=1
let Tlist_Use_Right_Window=1
let Tlist_Auto_Open=0
let Tlist_Auto_Update=1
let Tlist_Show_One_File = 1
set tags=tags;
set tags+=/RD_work/xyue/modules/tags_lib
set autochdir
nmap wm :if IsWinManagerVisible() <BAR> WMToggle<CR> <BAR> else <BAR> WMToggle<CR>:q<CR> endif <CR><CR>
let g:neocomplcache_enable_at_startup=1
let g:miniBufExplMapCTabSwitchBufs = 1
let g:miniBufExplModSelTarget = 1
set t_Co=256
set laststatus=2
let g:airline#extensions#tabline#enabled = 0
set makeprg=pmake
set cursorline
inoremap <silent> <CR> <C-r>=<SID>my_cr_function()<CR>
inoremap ( ()<Esc>:let leavechar=")"<CR>i
inoremap [ []<Esc>:let leavechar="]"<CR>i
inoremap { {}<Esc>:let leavechar="}"<CR>i
inoremap " ""<Esc>:let leavechar="""<CR>i
inoremap ' ''<Esc>:let leavechar="'"<CR>i
imap <C-j> <Esc>:exec "normal f" . leavechar<CR>a
function! s:my_cr_function()
  return neocomplcache#smart_close_popup() . "\<CR>"
  " For no inserting <CR> key.
  "return pumvisible() ? neocomplcache#close_popup() : "\<CR>"
endfunction

set noswapfile
set nobackup
set nowb

set undofile
set undodir=/home/xyue/.vim/back_up/
