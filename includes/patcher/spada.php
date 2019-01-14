<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
        window.addEventListener("load", function () {
            new DllPatcherContainer([
                new DllPatcher("bm2dx", [
                    {
                        name: "时间锁定",
                        patches: [{offset: 0x9150E, off: [0x74], on: [0xEB]}]
                    },
                    {
                        name: "全曲解锁",
                        patches: [{offset: 0x48C3D, off: [0x75, 0x09], on: [0x90, 0x90]}]
                    },
                    {
                         name: "CS-Style 歌曲开始延迟",
                         tooltip: "按住 Start 延迟播放直到松开",
                         patches: [{offset: 0x6A046, off: [0x7C], on: [0xEB]}]
                    },
                    {
                        name: "无限次数",
                        patches: [{offset: 0x4F2DA, off: [0x75], on: [0xEB]}]
                    },
                    {
                        name: "无限次数 时间锁定",
                        patches: [{offset: 0x4882D, off: [0x48], on: [0x90]}]
                    },
                    {
                        name: "隐藏 FREE PLAY 标识",
                        patches: [{offset: 0x13E8A, off: [0xEC, 0x0B, 0x15], on: [0x14, 0xC8, 0xC7]}]
                    },
                    {
                        name: "光标锁定",
                        tooltip: "在游玩结束后光标自动回到上一歌曲位置",
                        patches: [{offset: 0x5C3EE, off: [0x74, 0x22], on: [0x90, 0x90]}]
                    },
                    {
                        name: "音量Bug修复",
                        tooltip: "如果系统音量锁定满格，请勾选",
                        patches: [{offset: 0xCA369, off: [0x00], on: [0x01]}]
                    },
                    {
                        name: "开发者模式(不保存成绩!)",
                        tooltip: "在游戏中 F1 打开选项",
                        patches: [{offset: 0x9E090, off: [0x32, 0xC0], on: [0x0C, 0x01]}]
                    },
                    {
                        name: "Free play 文字显示在LED板上",
                        patches: [{offset: 0x13E8A, off: [0xEC, 0x0B, 0x15, 0x10], on: [0xF4, 0xAE, 0x41, 0x11]}]
                    },
                ], "2014-07-16"),
            ]);
        });
    </script>