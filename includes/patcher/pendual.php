<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcher("bm2dx", [
                    {
                     name : "时间锁定",
                     patches : [{offset : 0x9c55e, off: [0x74], on : [0xEB]}]
                    },
                    {
                     name : "无限次数",
                     patches : [{offset : 0x5d31b, off: [0x75], on : [0xEB]}]
                    },
                    {
                     name : "无限次数 时间锁定",
                     patches : [{offset : 0x563ad, off: [0x48], on : [0x90]}]
                    },
                    {
                     name : "全曲解锁",
                     patches : [{offset : 0x58b3e, off: [0x74, 0x0a], on : [0x90, 0x90]}]
                    },
                    {
                     name: "CS-Style 歌曲开始延迟",
                     tooltip: "按住 Start 延迟播放直到松开",
                     patches : [{offset : 0x77cf6, off: [0x7C], on : [0xEB]}]
                    },
                    {
                     name: "光标锁定",
                     tooltip: "在游玩结束后光标自动回到上一歌曲位置",
                     patches : [{offset : 0x6BF3A, off: [0x74, 0x23], on : [0x90, 0x90]}]
                    },
                    {
                     name: "音量Bug修复",
                     tooltip: "如果系统音量锁定满格，请勾选",
                     patches : [{offset : 0xD5D09, off: [0x00], on : [0x01]}]
                    },
                    {
                     name : "覆盖 FREE PLAY 标识至歌曲名字",
                     patches : [{offset : 0x14C3A, off: [0x90, 0x3F, 0x12, 0x10], on : [0x24, 0xAA, 0x43, 0x11]}]
                    },
                ]);
            });
        </script>