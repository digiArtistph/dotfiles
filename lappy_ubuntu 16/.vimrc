"set nocompatible
"set backspace=indent,eol,start
" Nice to have
:set nu
syntax on

" Show statusbar
:set laststatus=2
"
" Sets the colorscheme
:colorscheme jellybeans

set nocompatible              " be iMproved, required
filetype off                  " required

:let mapleader = "\<space>"
set pastetoggle=<F2>

"set runtimepath^=~/.vim/bundle/ctrlp.vim
set rtp+=~/.vim/bundle/Vundle.vim
call vundle#begin()
Plugin 'gmarik/Vundle.vim'
Plugin 'edkolev/tmuxline.vim'
Plugin 'easymotion/vim-easymotion'
Plugin 'rstacruz/sparkup', {'rtp': 'vim/'}
Plugin 'tmhedberg/SimpylFold'
Plugin 'benmills/vimux'
Plugin 'mileszs/ack.vim'
Plugin 'terryma/vim-expand-region'
Plugin 'MattesGroeger/vim-bookmarks'
Plugin 'scrooloose/nerdtree'
Plugin 'Xuyuanp/nerdtree-git-plugin'
Plugin 'mru.vim'
Plugin 'MarcWeber/vim-addon-mw-utils'
Plugin 'tomtom/tlib_vim'
Plugin 'garbas/vim-snipmate'
Plugin 'flazz/vim-colorschemes'
call vundle#end()  

filetype plugin on
filetype plugin indent on    " required

set  rtp+=/home/kenn/.local/lib/python3.5/site-packages/powerline/bindings/vim/
set laststatus=2
" set t_Co=256

" Softtabs, 2 spaces
set tabstop=2
set shiftwidth=2
set shiftround
set expandtab

" replace string contents with recently copied text
nmap <Leader>r" bi"jkea"jk
" nmap <Leader>c" "_di"Pa
nmap <Leader>r' '_di'P
" nmap <Leader>c' '_di'Pa

" kenn's mappings
nmap vsp :vsp<CR>:vertical resize 133%<CR>
nmap <leader>; :vertical resize 67%<CR>
nmap <leader>' :vertical resize 133%<CR>
nmap <leader><leader>- :sp<CR>
nmap <leader><leader>p :NERDTree<CR>
map <F5> :buffer<Space><C-d>
map! <F5> <ESC><CR>
nmap <leader>x :Q<cr>
inoremap jk <ESC>
nnoremap ev :edit $MYVIMRC<CR>
nnoremap evv :edit ~/dotfiles/.vimrc2<CR>
nnoremap ;j 12<c-e>
nnoremap ;k 12<c-y>
nnoremap <leader>g G
nnoremap <leader><leader>t :tabn<CR>
nnoremap <C-L> L
nnoremap <C-H> H
nnoremap L $
nnoremap H 0

" window
nnoremap <leader>h <C-W>h
nnoremap <leader>l <C-w>l

" buffer
nnoremap <leader>n :bn<cr>
inoremap <esc> <nop>
nnoremap tn :tabnew<CR>
nnoremap tc :tabclo<CR>
nnoremap t. :tabnext<CR>
nnoremap t, :tabprev<CR>
nnoremap bk :Bookmark<space>
nnoremap ok :OpenBookmark<space>
nnoremap rk :RevealBookmark<space>
nnoremap gt :tabnext<space>

"===========================================
" Reference
"===========================================
" cursor
" g; Go to [count] older position in change list
" g, Go to [count] newer cursor position in change list.
" Ctrl-O to jump back to the previous (older) location. 
" Ctrl-I (same as Tab) to jump forward to the next (newer) location.
" 123gg go to line 123
" Bookmark plugin >>> https://github.com/MattesGroeger/vim-bookmarks
" mm Add/remove bookmark at current line
" mi Add/edit/remove annotation at current line
" mn Jump to next bookmark in buffer
" mp Jump to previous bookmark in buffer
" ma Show all bookmarks (toggle)
" mc Clear bookmarks in current buffer only
" mx Clear bookmarks in all buffers
" mkk Move up bookmark at current line
" mjj Move down bookmark at current line
" :%s/\%V<oldStr>/<newStr>/g <<< find and replace text within an active selection and until the last selected character/s on the visually selected text
" :%S/<oldStr>/<newStr>/g <<< find and replace text within the whole file
" :'<,>'s/<oldStr>/<newStr>/g <<< find and replace text within an active selection
" :call ReloadAllSnippets() <<< vim's snipmate plugin. Reloading all snippets files


iabbrev nnorempa nnoremap
nnoremap <leader>rl :vertical resize 133%<CR>

" tmux
map <leader>vp :VimuxPromptCommand<CR>
map <leader>vl :VimuxRunLastComman<CR>
map <leader>vq :VimuxCloseRunner<CR>
map <leader>1 :call VimuxRunCommand("xmodmap ~/.Xmodmap.capsx")<CR>
map <leader>2 :call VimuxRunCommand("xmodmap ~/.Xmodmap.caps")<CR>
map <leader>3 :call VimuxRunCommand('tmux kill-session -t WORK')<CR>

nnoremap <leader>is :set incsearch<CR>
nnoremap <leader>nis :set noincsearch<CR>
"========================

set enc=utf-8
set fillchars=vert:¦
"
set expandtab
set tabstop=3
set shiftwidth=3
"set foldcolumn=1
"set cc=+1,+2
set foldmethod=manual
"
set linespace=0
set history=1000

set incsearch

set list
set listchars=tab:▸\ ,eol:¬

set ffs=unix,dos

" swap files (.swp) in a common location
" // means use the file's full path
set dir=~/.vim/_swap/

 " backup files (~) in a common location if possible
set backup
set backupdir=~/.vim/_backup/
"
" " turn on undo files, put them in a common location
"" Unmap the arrow keys
set undofile
set undodir=~/.vim/_undo/

"autocmd VimEnter * :silent !xmodmap ~/.Xmodmap.capsx
"autocmd VimLeave * :silent !xmodmap ~/.Xmodmap.caps

let g:ackprg="ack-grep -H --nocolor --nogroup --column"
let g:SuperTabDefaultCompletionType = 'context'
nmap <leader>a :tab split<CR>:Ack ""<Left>
nmap <leader>r :tab split<CR>:Ack <C-r><C-w><CR>

" LustyExplorer
set hidden
"nnoremap <leader>/ :LustyBufferGrep<CR>
map <F8> :LustyBufferGrep<CR>

" functionlist
map <F6> :Flisttoggle <CR> 
map! <F6> <CR>

"shares clipboard with the system
set clipboard=unnamedplus

" operator-pending cmd
onoremap ipr :<c-u>normal! f(vi(<cr>
onoremap ipe :<c-u>normal! f(hviw<cr>

" =======================================================================
" Borrowed Key Mappings
" =======================================================================
" https://sheerun.net/2014/03/21/how-to-boost-your-vim-productivity/
nnoremap <Leader>o :CtrlP<CR>
nnoremap <Leader>w :w<CR>
vmap <Leader>y "+y
vmap <Leader>d "+d
nmap <Leader>p "+p
nmap <Leader>P "+P
vmap <Leader>p "+p

" https://github.com/shawncplus/dotfiles/blob/master/.vim/startup/mappings.vim
"" Unmap the arrow keys
no <down> ddp
no <left> <Nop>
no <right> <Nop>
no <up> ddkP
ino <down> <Nop>
ino <left> <Nop>
ino <right> <Nop>
ino <up> <Nop>
vno <down> <Nop>
vno <left> <Nop>
vno <right> <Nop>
vno <up> <Nop>
vmap <Leader>P "+P

" sourcing other vimrc file
source ~/dotfiles/.vimrc2

" switches to the last active tab
let g:lasttab = 1
nmap <leader>t :exe "tabn ".g:lasttab<CR>
au TabLeave * let g:lasttab = tabpagenr()
