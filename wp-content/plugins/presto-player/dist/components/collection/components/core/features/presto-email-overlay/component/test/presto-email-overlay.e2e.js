import{newE2EPage}from"@stencil/core/testing";describe("presto-email-overlay",(()=>{let e,a;beforeEach((async()=>{e=await newE2EPage(),await e.setContent("<presto-email-overlay></presto-email-overlay>"),a=await e.find("presto-email-overlay")})),it("renders",(async()=>{expect(a).toHaveClass("hydrated")}))}));