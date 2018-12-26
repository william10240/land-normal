
module.exports = function (grunt) {
    let src = 'resources/v1.0/src';
    let dist = 'resources/v1.0/dist';
    //任务配置代码
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        clean: {
            all: [
                dist + '/css',
                dist + '/images',
                dist + '/js',
                dist + '/plugins',
                dist + '/temp',
                dist
            ],
            builded: [
                src + '/css/style.css',
                dist + '/css/style.sprite.css'
            ]
        },
        csslint: {//css语法检查
            options: {
                // csslintrc: '.csslint'
            },
            build: [src + 'css/*.css']
        },
        concat: {//合并文件
            options: {
                // separator: ';'
            },
            cssConcat: {
                src: [
                    src + '/css/1common.css',
                    src + '/css/2unit.css',
                    src + '/css/3icos.css',
                    src + '/css/4overwrite.css',
                    src + '/css/5page.css',
                    src + '/css/6other.css',
                    src + '/css/webuploader_edit.css'
                ],
                dest: src + '/css/style.css'
            },
            jsConcat: {
                src: [
                    src + '/js/common.js',
                    src + '/js/webuploader.js'
                ],
                dest: dist + '/js/common.js'
            }
        },
        less: {//编译css
            main: {
                options: {
                    // compress:true
                },
                files: {
                    "src/css/style.css": "src/less/style.less"
                }
            }
        },
        uglify: {//压缩js
            compressjs: {
                files: {
                    'dist/js/common.min.js': ['dist/js/common.js']
                }
            }
        },
        jshint: {//验证js

            all: ['dist/js/common.js']
        },
        sprite: {// 自动雪碧图
            autoSprite: {
                files: [{
                    expand: true,// 启用动态扩展
                    cwd: src + '/css/',// css文件源的文件夹
                    src: 'style.css',// 匹配规则
                    dest: dist + '/css/',// 导出css和sprite的路径地址
                    ext: '.sprite.css'// 导出的css名
                }]
            },
            options: {
                // sprite背景图源文件夹，只有匹配此路径才会处理，默认 images/slice/
                imagepath: src + '/images/slice/',
                // 映射CSS中背景路径，支持函数和数组，默认为 null
                imagepath_map: null,
                // 雪碧图输出目录，注意，会覆盖之前文件！默认 images/
                spritedest: dist + '/images/',
                // 替换后的背景路径，默认 ../images/
                spritepath: '../images/',
                // 各图片间间距，如果设置为奇数，会强制+1以保证生成的2x图片为偶数宽高，默认 0
                padding: 4,
                // 是否使用 image-set 作为2x图片实现，默认不使用
                useimageset: false,
                // 是否以时间戳为文件名生成新的雪碧图文件，如果启用请注意清理之前生成的文件，默认不生成新文件
                newsprite: false,
                // 给雪碧图追加时间戳，默认不追加
                spritestamp: true,
                // 在CSS文件末尾追加时间戳，默认不追加
                cssstamp: true,
                // 默认使用二叉树最优排列算法
                algorithm: 'top-down',
                //algorithm: 'binary-tree',
                // 默认使用`pixelsmith`图像处理引擎
                engine: 'pixelsmith'
            }
        },
        cssmin: {
            options: {
                keepSpecialComments: 0
            },
            compress: {
                files: {
                    'resources/v1.0/dist/css/style.css': [
                        "resources/v1.0/dist/css/style.sprite.css"
                    ]
                }
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true, cwd: src + '/images/', src: [
                        'logo.png',
                        'loginbg.jpg',
                        'bg_black.png',
                    ], dest: dist + '/images/', filter: 'isFile'
                    },
                    {expand: true, cwd: src + '/plugins/', src: ['**'], dest: dist + '/plugins/'},
                    {expand: true, cwd: src + '/temp/', src: ['**'], dest: dist + '/temp/', filter: 'isFile'},
                ]
            }
        },
        watch: {
            files: [
                // 'resources/v1.0/src/css/1common.css',
                // 'resources/v1.0/src/css/2unit.css',
                // 'resources/v1.0/src/css/3icos.css',
                // 'resources/v1.0/src/css/4overwrite.css',
                // 'resources/v1.0/src/css/5page.css',
                // 'resources/v1.0/src/css/6other.css',
                // 'resources/v1.0/src/css/webuploader_edit.css',
                // 'resources/v1.0/src/images/**/*',
                'resources/v1.0/src/**/*',
            ],
            tasks: ['concat', 'sprite', 'cssmin', 'clean:builded', 'copy:main'],
            options: {
                spawn: false,
            }
        }
    });
    //插件加载代码
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-css-sprite');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    //任务注册代码
    grunt.registerTask('all', ['clean:all', 'concat', 'copy:main', 'sprite', 'cssmin', 'clean:builded']);
    grunt.registerTask('dev', ['concat', 'sprite', 'cssmin', 'clean:builded', 'copy:main']);
    grunt.registerTask('default');

    grunt.event.on('watch', function (action, filepath, target) {
        grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
    });
};