            <style type="text/css">
                nav.navbar {
                    z-index:99 !important;
                }
                  .preloaders{
        width:100%;
        height:100vh;
        background: rgba(255,255,255,0.8);
        position: fixed;
        top:0px;
        left:0px;
        display:none;
        justify-content:center;
        align-items:center;
        z-index:102;
        
    }
    .logpreloader{
        width:100px;
        animation-name:na;
        animation-duration:1s;
        animation-iteration-count:infinite;
        transform:rotate(360deg)
    }
    @keyframes na{
        from{
            transform:rotate(0deg)
        }
        to{
            transform:rotate(360deg)
        }
    }
                .login{
                    width:100%;
                    height: 600px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .create-account{
                    width:500px;
                    height: auto;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
                    padding: 15px;
                }
                .login-form-section2{
                    width:90%;
                    height: auto;
                    display: flex;
                    align-items: center;
                    padding: 10px;
                    flex-direction: column;
                }
                .login-form-branch2{
                    width:350px;
                    height: 50px;
                    border-bottom: 1px solid #ccc;
                    background: white;
                    padding-left: 5px;
                    padding-right: 5px;
                    margin: 15px;
                }
                .login-form-branch2 input{
                    width:80%;
                    height: 45px;
                    background: none;
                    border: 0px;
                    outline: none;padding-left: 15px;
                }
                @media(max-width:600px){
                    .create-account{
                        width:90%;
                    }
                    .login-form-branch2{
                    width:100%;
                }

                }
                .loadstop{
                   width:50px;display:flex;justify-content:center;height:50px;align-items: center;border-radius: 50px;background-image: -webkit-linear-gradient(0deg,#0796c6 0%,#3de784 100%);
                   display: none;
                   animation-name: je;
                   animation-duration: 1s;
                   animation-iteration-count: infinite;
                                       box-shadow: 0 0 35px 0 rgb(154 161 171 / 45%);

                }
                .topload{
                    width:100%;display:flex;justify-content: center;position: relative;
/*                    top: -50px;*/
                }
                @keyframes je{
                    from{
                        rotate: 0ddeg;
                    }to{
                        rotate: 360deg;
                    }
                }

            </style>