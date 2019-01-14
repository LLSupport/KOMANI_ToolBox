<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcher("bm2dx", [
                    {
                     name : "时间锁定",
                     patches : [{offset : 0x8F98E, off: [0x74], on : [0xEB]}]
                    },
                    {
                     name : "无限次数",
                     patches : [{offset : 0x562BA, off: [0x75], on : [0xEB]}]
                    },
                    // By mon - modifies a few more bytes than needed but whatever
                    {
                     name : "无限次数 (双人模式)",
                     patches : [{offset : 0x56424, off: [0x74, 0x2f], on : [0x90, 0x90]},
                                {offset : 0x56435, off: [0x0f, 0x85, 0x3b], on : [0xe9, 0x3c, 0xff]},
                                {offset : 0x5643a, off: [0xff], on : [0x90]}]
                    },
                    {
                     name : "无限次数 时间锁定",
                     patches : [{offset : 0x4F8FD, off: [0x48], on : [0x90]}]
                    },
                    {
                     name : "全曲解锁",
                     patches : [{offset : 0x4FD84, off: [0x74, 0x16], on : [0x90, 0x90]}]
                    },
                    {
                     name : "Level 12 解锁",
                     patches : [{offset : 0x4FE35, off: [0x83, 0xFF, 0x02, 0x74, 0x0B, 0x83, 0xFF, 0x05, 0x74, 0x06, 0xB0, 0x01],
                                                   on : [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
                    },
                    {
                     name: "光标锁定",
                        tooltip: "在游玩结束后光标自动回到上一歌曲位置",
                     patches : [{offset : 0x63722, off: [0x74, 0x23], on : [0x90, 0x90]}]
                    },
                    {
                     name: "CS-Style 歌曲开始延迟",
                         tooltip: "按住 Start 延迟播放直到松开",
                     patches : [{offset : 0x6F3FF, off: [0x7C], on : [0xEB]}]
                    },
                    {
                     name : "关闭 HCN 教程",
                     patches : [{offset : 0x6F3E6, off: [0x5E, 0xE9, 0x24, 0xFF, 0xFF, 0xFF], on : [0x00, 0x00, 0x00, 0x00, 0x00, 0x00]}]
                    },
                    {
                     name : "快速重开",
                     tooltip : "在游玩中按住 VEFX 和 Effect 快速重开",
                     patches : [{offset : 0x46724, off: [0x8A, 0xC3], on : [0xB0, 0x01]}]
                    },
                    {
                     name : "夜间模式",
                     patches : [{offset : 0x68833, off: [0x74, 0x32], on : [0x90, 0x90]}]
                    },
                    {
                    name: "音量Bug修复",
                        tooltip: "如果系统音量锁定满格，请勾选",
                     patches : [{offset : 0xCB2B9, off: [0x00], on : [0x01]}]
                    },
                    {
                     type : "选项",
                     name : "FREE PLAY 标识",
                     offset : 0x1379A,
                     patches : [
                         {
                          name : "开",
                          patch : [0x88, 0x3D, 0x11, 0x10],
                         },
                         {
                          name : "关",
                          patch : [0x87, 0x3D, 0x11, 0x10],
                         },
                         {
                          name : "歌曲名称代替",
                          patch : [0x54, 0x1D, 0x42, 0x11],
                         },
                     ]
                    },
                ]);
            });
        </script>