<!--This software was created by mon.im and was modified by Noah.-->
<script type='text/javascript'>
      window.addEventListener('load', function () {
        new DllPatcherContainer([
          new DllPatcher('bm2dx', [
            {
              name: '全曲解锁',
              patches: [{offset: 0xB42D2, off: [0x74, 0x10], on: [0x90, 0x90]}]
            },
            {
              name: '无限次数',
              patches: [{offset: 0xDA3C9, off: [0x75, 0x14], on: [0xEB, 0x14]}]
            },
            {
              name: '无限次数 时间锁定',
              patches: [{offset: 0xB682D, off: [0xFF, 0xC8], on: [0x90, 0x90]}]
            },
            {
              name: "光标锁定",
                        tooltip: "在游玩结束后光标自动回到上一歌曲位置",
              patches: [{offset: 0xDD4AC, off: [0x74, 0x1D], on: [0x90, 0x90]}]
            },
            {
              name: "CS-Style 歌曲开始延迟",
                         tooltip: "按住 Start 延迟播放直到松开",
              patches: [{offset: 0xF296A, off: [0x7D, 0x25], on: [0x90, 0x90]}]
            },
          ], "2018-06-13"),
        ]);
      });
    </script>